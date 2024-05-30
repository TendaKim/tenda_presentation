export function shuffleArray(arr) {
  // 配列の要素とインデックスに対して、以下の処理を繰り返す
  arr.forEach((_, idx) => {
    // ランダムなインデックスを取得 (0 から配列の長さ - 1 まで)
    const randomIdx = Math.floor(Math.random() * arr.length);

    // 入れ替えを行う (デストラクチャリング代入を利用)
    [arr[randomIdx], arr[idx]] = [arr[idx], arr[randomIdx]];
  });
}
