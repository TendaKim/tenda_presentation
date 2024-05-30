import { shuffleArray } from "./utils.js";
import { CustomElemName } from "./constants.js";

// #はこのクラスの中でだけ実行される意味

export class GameBoard extends HTMLElement {
  // カードの情報 (非公開)
  #cards = [];

  // レベルに応じたカード枚数 (非公開)
  #level = {
    easy: 2,
    medium: 4,
    hard: 6,
    veryHard: 20,
  };

  // 操作ロックフラグ (非公開)
  #lock = false;

  // 一枚目クリックされたカード (非公開)
  #firstCard = null;

  // 二枚目クリックされたカード (非公開)
  #secondCard = null;

  async connectedCallback() {
    // 同期処理のために
    const cardInfoList = await this.#fetchCardInfoList(this.#level.veryHard);
    this.classList.add("board");
    this.#cards = this.#createCards(cardInfoList);
    shuffleArray(this.#cards);
    this.append(...this.#cards);
    this.#bindEvents();
  }

  // イベントのバインド (非公開)
  #bindEvents() {
    this.addEventListener("click", (event) => {
      // closet -> セレクタ探す
      const gameCard = event.target?.closest(CustomElemName.gameCard);
      if (!gameCard) {
        return;
      }
      this.#onClickCard(gameCard);
    });
  }

  // カードクリック時の処理 (非公開)
  #onClickCard(gameCard) {
    if (this.#lock) {
      return;
    }

    if (this.#firstCard === gameCard) {
      return;
    }

    if (gameCard.isDisabled) {
      return;
    }

    this.#lock = true;
    gameCard.flip(); // カードをめくる処理

    if (!this.#firstCard) {
      this.#firstCard = gameCard;
      this.#lock = false;
      return;
    }

    this.#secondCard = gameCard;
    this.#checkForMatch();
  }

  // 選択リセット (非公開)
  #resetSelections() {
    this.#firstCard = null;
    this.#secondCard = null;
    this.#lock = false;
  }

  // カードのペアチェック (非公開)
  #checkForMatch() {
    const isMatch =
      this.#firstCard.dataset.name === this.#secondCard.dataset.name;

    if (isMatch) {
      this.#firstCard.disable(); // カード使用不可にする処理
      this.#secondCard.disable();

      this.#resetSelections();
      return;
    }

    setTimeout(() => {
      this.#firstCard.flip();
      this.#secondCard.flip();
      this.#resetSelections();
    }, 1200);
  }

  // カードの作成 (非公開)
  #createCards(cardInfoList) {
    // spread operator　配列の複製
    const cardList = [...cardInfoList, ...cardInfoList].map((cardInfo) => {
      const card = document.createElement(CustomElemName.gameCard);
      card.setAttribute("imagePath", cardInfo.imagePath);
      card.setAttribute("name", cardInfo.name);
      return card;
    });
    return cardList;
  }

  // カード情報の取得 (非公開)
  // async 非同期処理の意味
  async #fetchCardInfoList(count) {
    // fetch json　ファイルのデータの取得
    const response = await fetch("./cardData.json");
    const cards = await response.json();
    // 配列でレベルにぐらいに保存
    return cards.slice(0, count);
  }
}

customElements.define(CustomElemName.gameBoard, GameBoard);
