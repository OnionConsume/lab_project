<form action="{{ route('submit-test-result') }}" method="POST">
    @csrf
    <!-- Other form fields omitted for brevity -->
    <div class="form-group">
        <label for="test_id">Test ID:</label>
        <input type="text" id="test_id" name="test_id" readonly>
    </div>
    <!-- Other form fields omitted for brevity -->
    <input type="submit" value="Submit">
</form>
<script>
    fetch('/get-highest-test-id')
        .then(response => response.json())
        .then(data => {
            document.getElementById('test_id').value = data.highest_test_id;
        })
        .catch(error => console.error('Error fetching highest test ID:', error));
</script>
