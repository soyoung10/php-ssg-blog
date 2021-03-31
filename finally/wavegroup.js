import {
  Wave
} from './wave.js';

//여러 개의 wave 생성
export class WaveGroup {
  constructor() {
    //wave 수
    this.totalWaves = 1;
    //wave 하나 당, 포인트 수
    this.totalPoints = 6;

    //wave 색
    this.color = ['rgba(0,199,235,.4)', 'rgba(0,146,199,.4)', 'rgba(0,87,158,.4)'];

    this.waves = [];

    //total wave 수 만큼 wave 생성
    for (let i = 0; i < this.totalWaves; i++) {
      const wave = new Wave(
        i,
        this.totalPoints,
        this.color[i],
      );
      this.waves[i] = wave;
    }
  }

  //함수 실행시 wavegroup 안에 있는 전체 wave만큼 함수 실행
  resize(stageWidth, stageHeight) {
    for (let i = 0; i < this.totalWaves; i++) {
      const wave = this.waves[i];
      wave.resize(stageWidth, stageHeight);
    }
  }

  draw(ctx) {
    for (let i = 0; i < this.totalWaves; i++) {
      const wave = this.waves[i];
      wave.draw(ctx);
    }
  }
}