@extends('layout')

@section('content')
           <br>
           <div class="container text-center"> <p class="h3 flow-text">Als Bitcoin Enthusiast freue ich mich über jeden Satoshi:</p>
               <br>
               <br>
               <br>
               <br>
               <style type="text/css"> .btcpay-form { display: inline-flex; align-items: center; justify-content: center; } .btcpay-form--inline { flex-direction: row; } .btcpay-form--block { flex-direction: column; } .btcpay-form--inline .submit { margin-left: 15px; } .btcpay-form--block select { margin-bottom: 10px; } .btcpay-form .btcpay-custom-container{ text-align: center; }.btcpay-custom { display: flex; align-items: center; justify-content: center; } .btcpay-form .plus-minus { cursor:pointer; font-size:25px; line-height: 25px; background: #DFE0E1; height: 30px; width: 45px; border:none; border-radius: 60px; margin: auto 5px; display: inline-flex; justify-content: center; } .btcpay-form select { -moz-appearance: none; -webkit-appearance: none; appearance: none; color: currentColor; background: transparent; border:1px solid transparent; display: block; padding: 1px; margin-left: auto; margin-right: auto; font-size: 11px; cursor: pointer; } .btcpay-form select:hover { border-color: #ccc; } #btcpay-input-price { -moz-appearance: none; -webkit-appearance: none; border: none; box-shadow: none; text-align: center; font-size: 25px; margin: auto; border-radius: 5px; line-height: 35px; background: seagreen; } </style>
               <form method="POST"  action="https://linuxtopic.duckdns.org:20916/api/v1/invoices" class="btcpay-form btcpay-form--block">
                   <input type="hidden" name="storeId" value="AR74sMUQa46D5V1hBaJPgooqzh416mT5Ty5HVu7pBce8" />
                   <input type="hidden" name="browserRedirect" value="https://linuxtopics.com" />
                   <div class="btcpay-custom-container">
                       <div class="btcpay-custom">
                           <input id="btcpay-input-price" name="price" type="number" min="1" max="20" step="1" value="1" style="width: 3em;" oninput="event.preventDefault();isNaN(event.target.value) || event.target.value <= 0 ? document.querySelector('#btcpay-input-price').value = 10 : event.target.value"  />
                       </div>
                       <select name="currency">
                           <option value="USD" selected>EUR</option>
                           <option value="GBP">GBP</option>
                           <option value="EUR">EUR</option>
                           <option value="BTC">BTC</option>
                       </select>
                   </div>
                   <input type="image" class="submit" name="submit" src="https://linuxtopic.duckdns.org:20916/img/paybutton/pay.svg" style="width:209px" alt="Pay with BtcPay, Self-Hosted Bitcoin Payment Processor">
               </form>
<br>
               <br>





@endsection

