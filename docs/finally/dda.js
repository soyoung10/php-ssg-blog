//wave 실행
import {
  WaveGroup
} from './wavegroup.js';

class App {
  constructor() {
    //캔버스 생성
    this.canvas = document.createElement('canvas');
    this.ctx = this.canvas.getContext('2d');
    document.body.appendChild(this.canvas);

    //wave 생성
    this.waveGroup = new WaveGroup();

    //애니메이션 시작
    window.addEventListener('resize', this.resize.bind(this), false);
    this.resize();

    requestAnimationFrame(this.animate.bind(this));
  }

  resize() {
    this.stageWidth = document.body.clientWidth;
    this.stageHeight = document.body.clientHeight;

    //캔버스 사이즈*2 
    this.canvas.width = this.stageWidth * 2;
    this.canvas.height = this.stageHeight * 2;
    this.ctx.scale(2, 2);

    //wave 실행
    this.waveGroup.resize(this.stageWidth, this.stageHeight);
  }

  //캔버스 클리어 추가
  animate(t) {
    this.ctx.clearRect(0, 0, this.stageWidth, this.stageHeight);

    //wave 실행
    this.waveGroup.draw(this.ctx);

    requestAnimationFrame(this.animate.bind(this));
  }
}

//윈도우 로드 시, 앱 생성
window.onload = () => {
  new App();
};