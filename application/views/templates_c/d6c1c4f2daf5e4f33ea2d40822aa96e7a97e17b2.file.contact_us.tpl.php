<?php /* Smarty version Smarty-3.0.7, created on 2012-05-26 16:36:19
         compiled from "application/views/templates\htmlincludes/contact_us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233034fc0ea63d7ef71-79620195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c1c4f2daf5e4f33ea2d40822aa96e7a97e17b2' => 
    array (
      0 => 'application/views/templates\\htmlincludes/contact_us.tpl',
      1 => 1338042918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233034fc0ea63d7ef71-79620195',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="contact" id="contact_us">
  <h2>Contact Us:</h2>
  <table border="0">
    <tbody>
      <tr>
        <td width="339"><h3>Telephone</h3>
            <p>+46 (0) 33-14 00 00</p>
          <h3>Opening hours:</h3>
          <p>monday - friday 07.00 - 21.00<br />
           saturday - sunday 09.00 - 15.00<br />
          Closed on all red days.</p>
          <h3>Email</h3>
          <p>kundservice.se@trendmobile.com</p>
          <h3>Fax</h3>
          <p>033-15 51 23</p>
          <h3>Address</h3>
          <p>TrendMobile<br />
          CustomerService<br />
            58431 Linkoping<br />
        Org. nr.: 556023-2312</p></td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 <h2>CONTACT FORM</h2>
<p>Customer service is here for you!&nbsp;We do our best to answer all your questions.&nbsp;This can apply to phones, orders, offers, repairs, payments, returns or exchanges - do not hesitate send us an email.&nbsp;<br />
</p>
<p>Required fields *.</p>
<form id="contact" name="contact" action="saveuserquery" method="post">
  <div spry:region="left">
    <label for="input-contact-country"><em>*</em>Choose office</label>
    <select name="countryCode" size="1" id="input-contact-country">
      <option value="ae">United Arab Emirates</option>
      <option value="at">Austria</option>
      <option value="be">Belgium</option>
      <option value="bh">Bahrain</option>
      <option value="ca">Canada</option>
      <option value="ch">Switzerland</option>
      <option value="cn">China</option>
      <option value="cz">Czech Republic</option>
      <option value="de">Germany</option>
      <option value="dk">Denmark</option>
      <option value="eg">Egypt</option>
      <option value="es">Spain</option>
      <option value="fi">Finland</option>
      <option value="fr">France</option>
      <option value="gb">UK</option>
      <option value="gr">Greece</option>
      <option value="hk">Hong Kong</option>
      <option value="hu">Hungary</option>
      <option value="ie">Ireland</option>
      <option value="il">Israel</option>
      <option value="it">Italy</option>
      <option value="jp">Japan</option>
      <option value="kr">South Korea</option>
      <option value="kw">Kuwait</option>
      <option value="lb">Lebanon</option>
      <option value="lu">Luxembourg</option>
      <option value="nl">The Netherlands</option>
      <option value="no">Norway</option>
      <option value="om">Oman</option>
      <option value="pl">Poland</option>
      <option value="pt">Portugal</option>
      <option value="qa">Qatar</option>
      <option value="ru">Russia</option>
      <option value="sa">Saudi Arabia</option>
      <option value="se" selected="selected">Sweden</option>
      <option value="si">Slovenia</option>
      <option value="sk">Slovakia</option>
      <option value="tr">Turkey</option>
      <option value="us">USA</option>
      <option value="hr">Croatia</option>
      <option value="ro">Romania</option>
      <option value="sg">Singapore</option>
      <option value="jo">Jordan</option>
      <option value="ma">Morocco</option>
      <option value="bg">Bulgaria</option>
    </select>
  </div>
  <div align="left">
    <label for="input-contact-area"><em>*</em>Choose a subject area</label>
    <select id="input-contact-area" name="queryarea">
      <option value="" selected="selected">-</option>
      <option value="shop">Customer Service Online</option>
      <option value="marketing">Market</option>
      <option value="other">Other</option>
      <option value="press">Press</option>
      <option value="quality">Quality</option>
    </select>
  </div>
  <div align="left">
    <label for="input-contact-question"><em>*</em>Enter your question</label>
    <textarea name="question" id="input-contact-question"></textarea>
  </div>
  <div align="left">
    <label for="input-contact-name">Type your full name</label>
    <input id="input-contact-name" name="fullName" type="text" value="" />
  </div>
  <div align="left">
    <label for="input-contact-email"><em>*</em>Write your email</label>
    <input id="input-contact-email" name="email" type="text" value="" />
  </div>
  <div align="left">
    <button type="submit" id="btn-submit-contact">SEND</button>
  </div>
</form>
<p>&nbsp;</p>
