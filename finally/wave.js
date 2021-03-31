//함수 실행
//포인트 생성
import {
  Point
} from './point.js';

export class Wave {
  constructor(index, totalPoints, color) {
    this.index = index;
    this.totalPoints = totalPoints;
    this.color = color;
    this.points = [];
  }

  //애니메이션 좌표값
  resize(stageWidth, stageHeight) {
    this.stageWidth = stageWidth;
    this.stageHeight = stageHeight;

    //각각 스테이지 절반
    this.centerX = stageWidth / 2;
    this.centerY = stageHeight / 2;

    //wave마다 몇 개의 포인트를 생성할 것인지 정의
    this.pointGap = this.stageWidth / (this.totalPoints - 1);

    this.init();
  }

  //centerX와 centerY를 넘긴다
  //포인트가 화면 중간을 기준으로 일어날 수 있게 한다.
  //포인트 간격 정의
  init() {
    this.points = [];

    for (let i = 0; i < this.totalPoints; i++) {
      const point = new Point(
        this.index + i,
        this.pointGap * i,
        this.centerY,
      );
      this.points[i] = point;
    }
  }


  //캔버스에 그리는 함수
  draw(ctx) {
    ctx.beginPath();
    ctx.fillStyle = this.color;

    let prevX = this.points[0].x;
    let prevY = this.points[0].y;

    ctx.moveTo(prevX, prevY);

    for (let i = 1; i < this.totalPointsl i++) {
      if (i < this.totalPoints - 1) {
        this.points[i].update();
      }

      const cx = (prevX + this.points[i], x) / 2;
      const cy = (prevY + this.points[i], y) / 2;

      ctx.lineTo(cx, cy);

      prevX = this.points[i].x;
      prevY = this.points[i].y;
    }

    ctx.lineTo(prevX, prevY);
    ctx.lineTo(this.stageWidth, this.stageHeight);
    ctx.lineTo(this.points[0].x, this.stageHeight);
    ctx.fill();
    ctx.closePath();

  }
}