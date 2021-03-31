  //간격을 가진 좌표를 만들어 Y값을 위아래로 이동
  //좌표를 하나의 선으로 연결
  export class Point {
    constructor(index, x, y) {
      this.x = x;
      this.y = y;
      this.fixedY = y;
      //현재값 증가
      this.speed = 0.1;
      this.cur = index;
      //얼마만큼 움직이는지
      this.max = Math.random() * 100 + 150;
    }

    //함수 실행시 위아래로 움직인다
    update() {
      this.cur += this.speed;
      //sin 함수
      //위아래로 움직이게
      this.y = this.fixedY + (Math.sin(this.cur) * this.max);
    }
  }