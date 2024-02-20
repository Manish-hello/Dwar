<style>
    input,section{
        border:1px solid black;
        outline:none;

    }
    
table {
  font-family: arial, sans-serif;
  border:3px solid orange;
  border-collapse: collapse;

}

td, th {
  text-align: left;
  padding: 8px;
}
</style>
<div class="container">
    <div class="">
        <div class="">
            <h1>Membership Entry</h1>
        </div>
        <table>
            <tr>
                <td><input type="number" class="" id="id" placeholder="ID" value="" onblur="autoinfo()"></td>
                <td><input type="text" class="" id="first_name" placeholder="First Name"></td>
            </tr>
            <tr>
                <td><input type="text" class="" id="last_name" placeholder="Last Name"></td>
                <td class="flex flex-col">Date of peyment:<input type="date" class="" id="date_of_peyment"></td>

            </tr>
            <tr class="flex">
                <td class="flex flex-col">Subscription Period(Month)<input type="number" class="" onblur="autodatee()" id="month_peyment"></td>
                <td class="flex flex-col">Date of expiry:<input type="date" class="" id="date_of_expiry"></td>
            </tr>
            <tr>
                <td>
                <button type="submit" id="save" onclick="submitMembershipInfo()" class="border w-20 text-white bg-orange-400 hover:bg-orange-500 px-2 py-1 rounded-md mt-5 mb-8 ease-in-out duration-500">Submit</button>
                </td>
            </tr>
        </table>
</div>
</div>
<script src="../js/jquery.js" type="text/javascript"></script>
