import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { HttpClient, HttpHeaders } from '@angular/common/http'

@Component({
  selector: 'app-register',
  templateUrl: './register.page.html',
  styleUrls: ['./register.page.scss'],
})
export class RegisterPage implements OnInit {

  member: Array<{ m_fullname: any, m_email: any, m_pass: any }>

  constructor(public router: Router, private http: HttpClient) {

    this.member = [];
  }

  add_member( m_fullname: any, m_email: any, m_pass: any) {
    this.member.push({ m_fullname: m_fullname, m_email: m_email, m_pass: m_pass })
    const httpOptions = {
      headers: { "Content-Type": "application/x-www-form-urlencoded" }
    };
    this.http.post("http://127.0.0.1/app_G_Simulation/webservice/register.php",
      ("&m_fullname=" +m_fullname+"&m_email=" +m_email+"&m_pass=" +m_pass), httpOptions)
      .toPromise().then(
        (response) => {
              console.log("Response")
            }
      ).catch(
  
        (error) => {
          console.error(error.status)
        }
      );
  }
  
 
  gotoHomePage() {
    this.router.navigate(["/home"]);
  }

  ngOnInit() {
  }
}
