import { Component ,OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import {Observable,of,throwError} from 'rxjs';


@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {
  m_email:any;
  m_pass:any;

  m_email_data:any;
  constructor(public router: Router,private http:HttpClient) { }

  login(){
    if(this.m_email !="" && this.m_pass !=""){
      console.log("user",this.m_email);
      console.log("pass",this.m_pass);

      let url:string ="http://127.0.0.1/App_G_Simulation/webservice/login.php";
      let dataPost = new FormData();
      dataPost.append('m_email',this.m_email);
      dataPost.append('m_pass',this.m_pass);

      let data:Observable<any> = this.http.post(url,dataPost);
      data.subscribe(res=>{
        if(res !=null){

          this.router.navigate(["/list"]);
        }
        ///console.log(this.username_data);
      });
    }else{
      console.log("กรุณากรอก username และ password")
    }
  }

  gotolistPage() {
    this.router.navigate(["/list"]);
    this.m_email.string ="";
    this.m_pass.string ="";
  }

  gotoRegiterPage(){
    this.router.navigate(['/register'])
  }

  ngOnInit() {
  }
}
