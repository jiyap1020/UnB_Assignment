<form method="POST" action="{{ route('parents.store') }}">
   
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    
    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    </div>
    
    <div>
        <label for="phone">Telephone number:</label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    
    <div>
        <label for="income">Annual Income:</label>
        <select id="income" name="income">
            <option value="<50000">Less than $50,000</option>
            <option value="50000-100000">$50,000-$100,000</option>
            <option value="100000-150000">$100,000-$150,000</option>
            <option value=">150000">Above $150,000</option>
        </select>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
