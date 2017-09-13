import { Injectable } from '@angular/core';
import {Http} from "@angular/http";
import 'rxjs/add/operator/toPromise';
@Injectable()
export class LampService {
    constructor(private http: Http){}
    doLamp(status: String): void {
        let lampUrl = "/lamp.php?status=" + status;
        this.http.get(lampUrl)
            .toPromise()
            .then(response => {
                let data = response.json();
                if (data.code != "0") {
                    alert(data.msg);
                } else {
                    alert("操作成功");
                }
            })
            .catch(this.handleError);
    }
    private handleError(error: any): Promise<any> {
        console.error('An error occurred', error); // for demo purposes only
        return Promise.reject(error.message || error);
    }
}