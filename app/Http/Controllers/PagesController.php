<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SendGrid;
use SendGrid\Mail\Mail;
use \Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
  // Homeを表示
  public function getHome()
  {
    return view('layouts.home');
  }

  // メール送信処理
  public function postSend(Request $request)
  {
    $request->validate([
      'email'    => 'required',
      'subject'  => 'required',
      'contents' => 'required',
    ]);

    $name = $_POST['name'];
    $emailadd = $_POST['email'];
    $subject = $_POST['subject'];
    $contents = $_POST['contents'];

    $email = new Mail();
    $email->setFrom($request->email, 'con animaお問合せ');
    $email->setSubject("[お問合せ] $subject");
    $email->addTo('con.anima.official@gmail.com');
    $email->addContent("text/plain", "名前: $name \r\nEmail: $emailadd \r\nタイトル: $subject \r\n内容: $contents \r\n");
    $sendgrid = new SendGrid(env('SENDGRID_API_KEY'));
    $response = $sendgrid->send($email);
    // if ($response->statusCode() == Response::HTTP_ACCEPTED) {
    //   return view('home', ['successMessage' => '送信できました！']);
    // } else {
    //   return view('home', ['errorMessage' => '送信失敗しました！']);
    // }
    return redirect(route('home'));
  }


  // Serviceを表示
  public function getFirst()
  {
    return view('layouts.service_first');
  }

  // Serviceを表示
  public function getSemi()
  {
    return view('layouts.service_semi');
  }

  // Serviceを表示
  public function getFull()
  {
    return view('layouts.service_full');
  }

  // Contactを表示
  public function getContact()
  {
    return view('layouts.contact');
  }
}
