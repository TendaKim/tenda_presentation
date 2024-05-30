import { CustomElemName } from "./constants.js";

export class GameCard extends HTMLElement {
  // カードの使用不可フラグ (非公開)
  #isDisabled = false;

  connectedCallback() {
    this.classList.add("card");
    this.dataset.name = this.getAttribute("name"); // カード名属性を data 属性に設定

    const frontImg = document.createElement("img");
    frontImg.classList.add("front");
    frontImg.src = this.getAttribute("imagePath"); // 画像パス属性からフロント面の画像を設定

    const backImg = document.createElement("img");
    backImg.classList.add("back");
    backImg.src = "../img/question.svg"; // 裏面の画像は質問マーク

    this.append(frontImg, backImg); // カード要素に表と裏の画像を追加
  }

  get isDisabled() {
    return this.#isDisabled;
  }

  flip() {
    this.classList.toggle("flip"); // カードをめくる (flip クラスの追加・削除)
  }

  disable() {
    this.#isDisabled = true; // カードを使用不可にする
  }
}

customElements.define(CustomElemName.gameCard, GameCard);
