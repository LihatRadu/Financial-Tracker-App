<div>
<h1>Transaction List</h1>


<table>
  <thead>
    <tr>
      <th>Date</th>
      <th>Description</th>
      <th>Amount</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transactions as $transaction)
    <tr>
      <td>{{ $transaction->date }}</td>
      <td>{{ $transaction->description }}</td>
      <td>{{ $transaction->amount }}</td>
      <td>{{ $transaction->type }}</td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
