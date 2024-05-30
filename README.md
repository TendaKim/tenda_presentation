# テンダの 2024 年新卒のカードゲーム

## ファイルの構成
```bash
- img // イメージのファイル
- style.css // スタイルのファイル
- tenda-card-game // カードゲーム
    - cardData.json // カードに入る各データ
    - constants.js // 各コンポーネントをコンスタントで定義
    - utils.js // カードのshuffleの処理
    - game-card.js // カードの処理
    - game-board.js // ゲームの処理
    - main.js // コンポーネントを集めるファイル

```

## 実行

1. Clone します。

```bash
git clone  https://github.com/TendaKim/tenda_presentation.git
```

2. ディレクトリへ移動

```bash
cd (省略)/tenda_presentation/tenda-card-game
```

3. index.html の実行

```bash
index.htmlをブラウザで開きます。
```

## コードの説明

1. ウェブコンポーネントの利用
   カードをコンポーネントの処理し、レベルによって簡単に切り替える。

```js
// game-card.js
// カードの生成
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
}

// game-board.js
// レベルに応じたカード枚数 (非公開)
  #level = {
    easy: 2,
    medium: 4,
    hard: 6,
    veryHard: 20,
  };

  async connectedCallback() {
    // 同期処理のために
    const cardInfoList = await this.#fetchCardInfoList(this.#level.veryHard);
    this.classList.add("board");
    this.#cards = this.#createCards(cardInfoList);
    shuffleArray(this.#cards);
    this.append(...this.#cards);
    this.#bindEvents();
  }

```

2. 同期処理

```js
// game-board.js
// awaitを利用し、カードの生成されることを待つ
async connectedCallback() {
    // 同期処理のために
    const cardInfoList = await this.#fetchCardInfoList(this.#level.veryHard);
    this.classList.add("board");
    this.#cards = this.#createCards(cardInfoList);
    shuffleArray(this.#cards);
    this.append(...this.#cards);
    this.#bindEvents();
  }
```

3. grid
```js
// style.css
// gridで処理し、カードが6個ずつ表示される
.board {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr ;
  perspective: 1000px;
}
```
