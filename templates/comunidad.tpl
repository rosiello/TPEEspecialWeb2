{include file="header.tpl"}


<!--///////////////////////////FORM////////////////////////////////////////--> 
<article class="main design">
<h3>gracias, ingrese sus datos para darse de alta</h3>
    <form action="register" method="POST">
        <p>Realice registro para ser parte de esta gran y nueva comunidad</p>
    {include file="login.tpl"}
    {include file="sign.tpl"}
           <!-- <p>Email:<input  type="text" name="email" id="email"></p>
            <p>Contraseña: <input  type="password" name="contraseña" id="pass"> </p>
            <p>Confirme contraseña: <input  type="password" name="confirmar contraseña" id=""> </p>
            <p><input id="submit" type="button" value="REGISTRARSE"></p>
            <h4>Si ya estas registrado solo inicia sesion</h4 >
           --> 

        <!--CAPTCHA_GAP-->
        <p id="msg_captcha"></p>
        <p id="code" class="captcha_style"></p>
        <div>
        <p id="input_captcha"></p>
        <p id="button_captcha"></p>
        <p id="captcha_result_message"></p>
        </div>
        <!--END_CAPTCHA_GAP-->
    
    </form>     
    <!-- <form action="login" method="POST">
    <p>Email:<input  type="text" name="usuario" id="usuario"></p>
            <p>Contraseña: <input  type="password" name="contraseña" id="password"> </p>
            <p><input id="submit" type="button" value="INICIAR SESION"></p>
   </form> -->
</article>
<!--END_FORM--> 


<!--TABLE_AND_LIST-->
<article class="submain table_font design">
<h3>listado de gimnasios</h3>
<table>
<tr>
    <th>Gimnasio recomendado</th>
    <th>Horarios de clases</th>
    <th>Precios</th>
    <th>Hs-Semanales</th>
</tr>
<tr>
    <td>ThaiKombat</td>
    <td>08:00 Hs</td>
    <td>1000$</td>
    <td>3 hs</td>
</tr>
<tr>
    <td>Bangkok-Thai</td>
    <td>13:00 hs</td>
    <td>1000$</td>
    <td>4 hs</td>
</tr>
<tr>
    <td>FlyArt</td>
    <td>19:30 Hs</td>
    <td>800$</td>
    <td>2 hs</td>
</tr>
<tr>
    <td>Rodriguez-Gym</td>
    <td>21:00 Hs</td>
    <td>1200$</td>
    <td>2 hs</td>
</tr>
</table>

<div class="list">
<ul>
    <li>crezca como persona y compañero</li>
    <li>mejora tu salud</li>
    <li>mejora tu vida</li>
    <li>eleva tu amor propio</li>
    <li>incrementa tu fuerza fisica tanto como psicologica</li>
    <li>mejora tus reflejos</li>
    <li>mejora tu elongacion muscular</li>
    <li>cure y/o mejore sus problemas fisicos</li>
    <li>pero lo mas importante: nunca te rindas!!</li>
</ul>
</div>
</article>
<!--END_TABLE_AND_LIST-->  
{include file="listaUsuarios.tpl"}
{include file="footer.tpl"}
<script type="text/javascript" src="js/captcha.js"></script>