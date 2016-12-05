@extends('layout.master')

@section('content')
    <div class="well span8">
        <form class="m-t" role="form" method="post" action="#">
            <table padding="15px">
            <th>
                <h3>Enter your details.</h3><br>
            </th>
                <tr>
                    <td>
                        First Name:
                    </td>
                    <td>
                        <input type="text" name="fname" class="form-control" placeholder="First name">
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Last Name:
                    </td>
                    <td>
                        <input type="text" name="lname" class="form-control" placeholder="Last name">
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Weight:
                    </td>
                    <td>
                        <input type="text" name="weight" class="form-control" placeholder="Weight in kg">
                        <br>
                    </td>
                    <td> kg</td>
                </tr>
                <tr>
                    <td>
                        Hight:
                    </td>
                    <td>
                        <input type="text" name="Hight" class="form-control" placeholder="Hight in cm">
                        <br>
                    </td>
                    <td> cm</td>
                </tr>
                <tr>
                    <td>
                        Blood group:
                    </td>
                    <td>
                        <select name="bloodGroup" class="form-control">
                            <option>
                                A+
                            </option>
                            <option>
                                B+
                            </option>
                            <option>
                                AB+
                            </option>
                            <option>
                                O+
                            </option>
                            <option>
                                A-
                            </option>
                            <option>
                                B-
                            </option>
                            <option>
                                AB-
                            </option>
                            <option>
                                O-
                            </option>
                        </select>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-success" id="editprofile"><i class="fa fa-pencil-square-o"></i>Update</button>
                    </td>
                </tr>
            </table>
            </form>
    </div>
@endsection