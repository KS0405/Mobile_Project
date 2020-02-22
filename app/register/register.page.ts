import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-register',
  templateUrl: './register.page.html',
  styleUrls: ['./register.page.scss'],
})
export class RegisterPage {
  m_fullname:string ="";
  m_phone:string ="";
  m_email:string ="";
  m_pass:String="";
  m_con_pass:String="";

  constructor(public router: Router) { }

  addRegister(){
    //console.log(this.m_fullname);
    
  }

  gotoHomePage() {
    this.router.navigate(["/home"]);
  }

  ngOnInit() {
  }
}
