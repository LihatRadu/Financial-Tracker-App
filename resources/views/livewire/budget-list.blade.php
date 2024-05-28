<div>
  <h1>Budget List</h1>
  <table>
    <thead>
      <tr>
        <th>Category</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($budgets as $budget)
      <tr>
        <td>{{ $budget->category }}</td>
        <td>{{ $budget->amount }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
