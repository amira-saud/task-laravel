
<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
</style>
    <h1>All Users </h1> 
        <table>
        <th><strong> Select </strong></th>
        <th><strong> Arabic Name </strong></th>
        <th><strong> English Name </strong></th>
        <th><strong> Deparment </strong></th>
        <th><strong> Job Title </strong></th>

        @foreach ($users as $user)
        <tr>


<td><input type="checkbox" name="name1" />&nbsp;</td>
<td> {{ $user->ar_name }} </td>
<td> {{ $user->en_name }} </td>
<td> {{ $user->department }} </td>
<td> {{ $user->job_title }} </td>
@endforeach
</table>