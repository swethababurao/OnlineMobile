<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
<div class="query" id="query_error">
<h2>CONTACT FORM</h2>
<div>
  <div>
    <p>&nbsp;</p>
    <p class="style1">Error! Please Fill in all the details. </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
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
    
  </div>
</div>
