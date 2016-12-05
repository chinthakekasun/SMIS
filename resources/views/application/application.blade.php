@extends('layout.master2')

@section('content')
      
	<div class="content">
    	<div class="well span8">
    		<h1>Application form for {{$title}}</h1>
      		
      	<form id="application" method="post" action="{{URL('application')}}">
            <h3>Personal Informations</h3>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="hidden" name="appliedfor" value={{$title}}>
      		
                  <table width="100%">
      			<tr>
      			   <td>Name with initial <font color="red">*</font></td>
      			   <td>:</td>
      			   <td>
                              <input class="form-control input-sm" name="name" data-validation="length" 
                                    data-validation-length="min5" 
                                    data-validation-error-msg="Name should have atleast 5 charactors"><br>
                           </td>
      			   <td width="5%"></td>
      			   <td>Permenent address</td>
	      		   <td>:</td>
	      		   <td>Address line 1 :</td>
                        <td>
	      			  <input type="text" name="address1" class="form-control input-sm">
	      		   </td>
      			</tr>
                        <tr>
                              <td>Student index number <font color="red">*</font></td>
                              <td>:</td>
                              <td>
                                    <input type="text" name="id" class="form-control input-sm"
                                                placeholder="ff/yyyy/nnnn"
                                                data-validation="custom" 
                                                data-validation-regexp="^[a-zA-Z]{2}\/[0-9]{4}\/[0-9]{4}$"
                                                data-validation-error-msg="Index number should be in correct format"><br></td>
      				<td width="5%"></td>
      				<td></td>
	      			<td>:</td>
	      			<td>Address line 2 :</td>
	      			<td>
	      				<input type="text" name="address2" class="form-control input-sm"><br>
	      			</td>
      			</tr>
      			<tr>
      				<td>Level</td>
      				<td>:</td>
      				<td>
      					<select name="level" class="form-control input-sm">
      						<option value="Level I">Level I</option>
      							<option value="Level II">Level II</option>
      							<option value="Level III">Level III</option>
      						</select><br>
      					</td>
						<td width="5%"></td>
      								<td></td>
	      								<td>:</td>
	      								<td>Address line 3 :</td>
	      								<td>
	      									<input type="text" name="address3" class="form-control input-sm"><br>
	      								</td>
      							</tr>
      							<tr>
      								<td>Date of birth</td>
      								<td>:</td>
      								<td><input type="date" name="date_of_birth" class="form-control input-sm" min="1986-01-01" max="2001-12-31" data-validation="date"><br></td>
      								<td width="5%"></td>
      								<td>Telephone number</td>
      								<td>:</td>
      								<td colspan="2"><input type="tel" name="tpnumber" class="form-control input-sm"><br></td>
      								<td></td>
      							</tr>
      							<tr>
      								<td>Gender</td>
      								<td>:</td>
      								<td><input name="gender" value="male" checked="checked" type="radio">Male
      								&nbsp;&nbsp;&nbsp;<input name="gender" value="female"  type="radio">Female</td><br>
      								<td width="5%"></td>
      								<td>E-mail <font color="red">*</font></td>
      								<td>:</td>
      								<td colspan="2">
                                                            <input class="form-control input-sm" name="email" data-validation="email" 
                                                                  data-validation-length="3-12" 
                                                                  data-validation-error-msg="You must enter your correct email">
                                                      </td>
      								<td></td>	
      							</tr>
      							
      							<tr>
      								<td>Faculty</td>
      								<td>:</td>
      								<td>
      									<select name="faculty" class="form-control input-sm">
									          <option selected="selected" value="Agriculture">Agriculture</option>
                                                                <option value="Engineering">Engineering</option>
                                                                <option value="Fisheries and Marine Sciences & Technology">Fisheries and Marine Sciences & Technology</option>
                                                                <option value="Humanities & Social Sciences">Humanities & Social Sciences</option>
									          <option value="Management & Finance">Management & Finance</option>
                                                                <option value="Medicine">Medicine</option>
                                                                <option value="Science">Science</option>
									          <option value="Technology">Technology</option>
									    </select><br>
      								</td>
      							</tr>
      						</table>
      					<h3>Sports Informations</h3>
      					<em><b>The participation of sports in the past :

      					<table >
      						<tr>
      							<td width="9%">Athletic</td>
      							<td width="1%">:</td>
      							<td width="28%"><input type="text" name="event1" class="form-control input-sm" placeholder="Event 1"></td>
      						</tr>
      						<tr>
      							<td></td>
      							<td>:</td>
      							<td><input type="text" name="event2" class="form-control input-sm" placeholder="Event 1"></td>
      						</tr>
      						<tr>
      							<td></td>
      							<td>:</td>
      							<td><input type="text" name="event3" class="form-control input-sm" placeholder="Event 1"></td>
      						</tr>
      					</table>
      					<table width="70%">
                                    
      						<tr>
      							<td width="15%">Criket </td><td width="14%"><input type="checkbox" name="crk" value="criket" class=""></td>
      							<td width="12%">Rugger</td><td width="14%"> <input type="checkbox" name="rgr" value="rugger" class=""></td>
      							<td width="11%">Football</td><td width="10%"> <input type="checkbox" name="ftb" value="football" class=""></td>
      							<td width="11%">Vallyball</td><td width="13%"> <input type="checkbox" name="vlb" value="vallyball" class=" "></td>
      						</tr>
      						<tr>
      							<td>Basketball</td><td width="14%"> <input type="checkbox" name="bktb" value="basketball" class=""></td>
      							<td>Elle </td><td width="14%"><input type="checkbox" name="elle" value="elle" class=""></td>
      							<td>Baseball </td><td width="10%"><input type="checkbox" name="bsb" value="baseball" class=""></td>
      							<td>Karate </td><td width="13%"><input type="checkbox" name="krt" value="Karate" class=""></td>
      						</tr>
      						<tr>
      							<td>Table Tennis</td><td width="14%"> <input type="checkbox" name="tt" value="tabletennis" class=""></td>
      							<td>Taekwondo </td><td width="14%"><input type="checkbox" name="tkd" value="taekwondo" class=""></td>
      							<td>Carrom </td><td width="10%"><input type="checkbox" name="crm" value="carrom" class=""></td>
      							<td>Hokey </td><td width="13%"><input type="checkbox" name="hky" value="hokey" class=""></td>
      						</tr>
      						<tr>
      							<td>Chess</td><td width="14%"> <input type="checkbox" name="chs" value="chess" class=""></td>
      							<td>Swimming </td><td width="14%"><input type="checkbox" name="swm" value="swimming" class=""></td>
      							<td>Tennis</td><td width="10%"><input type="checkbox" name="tns" value="tennis" class=""></td>
      							<td>Wrestling</td><td width="13%"><input type="checkbox" name="wrt" value="wrestling" class=""></td>
      						</tr>
      						<tr>
      							<td>Weight Lifting</td><td width="14%"> <input type="checkbox" name="wl" value="weightlifting" class=""></td>
      							<td>Road race</td><td width="14%"><input type="checkbox" name="rr" value="roadrace" class=""></td>
      							<td>Netball</td><td width="10%"><input type="checkbox" name="ntb" value="netball" class=""></td>
      							<td>Badminton</td><td width="13%"><input type="checkbox" name="bdm" value="badminton" class=""></td>
      						</tr>
      					</table>
      					<br>
      					<table width="99%">
      						<em><b>The participation of sports during the school life :</b></em><br>
      						<br>
      						<tr>
      							<td width="40%">
      							Zonal /District/Province
      							</td>
      							<td width="1%">:</td>
      							<td width="27%"><input type="text" name="zdp" class="form-control"></td>
      						</tr>
      						<tr>
      							<td>
      							All Island/National/International	
      							</td>
      							<td>:</td>
      							<td><input type="text" name="ani" class="form-control"></td>
      			</tr>
      			<tr>
      				<td>
      					Special achievement
      				</td>
      				<td>:</td>
      				<td><textarea name="spe" class="form-control"></textarea></td>
      				<td width="13%"></td>
      				<td width="8%"><input type="reset" name="reset" class="btn btn-warning"></td>
      				<td width="11%"><input type="submit" name="submit" class="btn btn-info"></td>
      			</tr>
      		</table>
      	</form>
    	</div>
   	</div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
      <script>
        $.validate({
          lang: 'en'
        });
      </script>
@endsection