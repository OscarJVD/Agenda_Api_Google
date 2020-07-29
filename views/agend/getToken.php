
<div class="container">
  <h2 class="text-center">Añadir tiquete / token</h2>
  <form method="POST">
      <input type="hidden" name="c" value="agend" >
      <input type="hidden" name="m" value="validateToken" > 

    <div class="form-group">
      <label for="exampleInputPassword1">Tiquete / Token</label>
      <input type="text" name="token" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary btn-block btn-lg">Enviar tiquete / Token</button>
  </form>
</div>