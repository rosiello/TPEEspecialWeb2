    <div class="design">
          <table class="design">
         <thead class="design">
          <tr>
                  <th>email</th>
                  <th>rango</th>
            </tr>
          </thead>
        <tbody class="design">
          {foreach from=$usuarios item=usuario}
            <tr>
                  <td>{$usuario->email}</td>
                  <td>{$usuario->rango}</td>
                  <td> <a href="BorrarUsuario/{$usuario->id}">BORRAR</td>
                  <td> <a href="EditarUsuario/{$usuario->id}">EDITAR</td> 
            </tr>
          {{/foreach}}  
      </tbody>
    </table>
  </div>
