@extends('layout')

@section('content')
    
<div class="container">
  <h2>Tabla de usuarios</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre de usuario</th>
        <th>Empresa</th>
        <th>Email</th>
        <th>Fecha Registro</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>xyz</td>
        <td>john@example.com</td>
        <td></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Mzx</td>
        <td>mary@example.com</td>
        <td></td>
      </tr>
      <tr>
        <td>July</td>
        <td>hxy</td>
        <td>july@example.com</td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<!--</body>-->
<!--</html>-->

@endsection