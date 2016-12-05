@extends('layout.master')

@section('content')
<div class="well span8">
<form method="post" action="{{URL('entryform')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
  <table width="50%">
  <tr>
    <td>Sport</td>
    <td>:</td>
    <td>
      <select name="sport" class="form-control input-sm">
				<option selected="selected" value="Athletics">Athletics</option>
									<option value="Badminton">Badminton</option>
                  <option value="Baseball">Baseball</option>
                  <option value="Basketball">Basketball</option>
                  <option value="Carrom">Carrom</option>
                  <option value="Chess">Chess</option>
                  <option value="Cricket">Cricket</option>
                  <option value="Elle">Elle</option>
                  <option value="Football">Football</option>
                  <option value="Hockey">Hockey</option>
                  <option value="Karate">Karate</option>
                  <option value="Wrestling">Wrestling</option>
                  <option value="Taekwondo">Taekwondo</option>
                  <option value="Netbal">Netball</option>
                  <option value="Rugger">Rugger</option>
                  <option value="Swimming">Swimming</option>
                  <option value="Tabletennis">Tabletennis</option>
                  <option value="Tennis">Tennis</option>
                  <option value="Volleyball">Volleyball</option>
                  <option value="Weight Lifting">Weight Lifting</option></select><br>
    </td>

  </tr>

  <tr>
    <td>Team</td>
      <td>:</td>
      <td >Men<input name="gender" value="Men" checked="checked" type="radio">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Wemen<input name="gender" value="Wemen" type="radio">
      </td> 
  </tr>
  </table>
  <br>

 <table width="50%">
  <tr>
    <td></td>
    <td>NAME</td>
    <td>REG.NO.</td>
  </tr>
  <tr>
    <td>1</td>
    <td width="80%"><input type="text box" name="cap" placeholder="Captain" required="" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="cap_indexNo" required="" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$"  class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>2</td>
    <td width="80%"><input type="text box" name="vcap" placeholder="Vice Captain" required="" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="vcap_indexNo" required="" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>3</td>
    <td width="80%"><input type="text box" name="name1" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name1_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>4</td>
    <td width="80%"><input type="text box" name="name2" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name2_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>5</td>
    <td width="80%"><input type="text box" name="name3" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name3_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>6</td>
    <td width="80%"><input type="text box" name="name4" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name4_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>7</td>
    <td width="80%"><input type="text box" name="name5" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name5_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>8</td>
    <td width="80%"><input type="text box" name="name6" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name6_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>9</td>
    <td width="80%"><input type="text box" name="name7" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name7_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>10</td>
    <td width="80%"><input type="text box" name="name8" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name8_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>11</td>
    <td width="80%"><input type="text box" name="name9" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name9_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>12</td>
    <td width="80%"><input type="text box" name="name10" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name10_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>13</td>
    <td width="80%"><input type="text box" name="name11" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name11_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>14</td>
    <td width="80%"><input type="text box" name="name12" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name12_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>15</td>
    <td width="80%"><input type="text box" name="name13" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name13_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>16</td>
    <td width="80%"><input type="text box" name="name14" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name14_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>17</td>
    <td width="80%"><input type="text box" name="name15" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name15_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>18</td>
    <td width="80%"><input type="text box" name="name16" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name16_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>19</td>
    <td width="80%"><input type="text box" name="name17" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name17_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
  </tr>
  <tr>
    <td>20</td>
    <td width="80%"><input type="text box" name="name18" class="form-control input-sm"></td>
    <td width="20%"><input type="text box" name="name18_indexNo" pattern="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$" class="form-control input-sm"></td>
    
  </tr>
  </table width="50%">
      <input type="submit" class="btn btn-info" value="Submit">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" class="btn btn-warning" value="Reset"> 
      <br>
</form>
</div>
@endsection
