import { Component } from '@angular/core';
import {LampService} from "./lamp.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = "Larry's lamp Demo";
  btnOn = "actived";
  btnOff = "";
  constructor(public lampService: LampService) {}
  turnOn(): void {
      this.btnOn = "actived";
      this.btnOff = "";
      this.lampService.doLamp("on");
  }
  turnOff(): void {
      this.btnOn = "";
      this.btnOff = "actived";
      this.lampService.doLamp("off");
  }
  lampInit(): void {
      this.lampService.doLamp("init");
  }
  lampBili(): void {
      this.lampService.doLamp("bilibili")
  }
}
