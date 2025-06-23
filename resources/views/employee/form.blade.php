<div class="mb-3">
    <label for="employee_id" class="form-label">Employee ID</label>
    <input type="text" class="form-control" id="employee_id" name="employee_id"
        value="{{ old('employee_id', isset($employee) ? $employee->employee_id : '') }}" placeholder="Employee ID" required>
    @error('employee_id')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name"
        value="{{ old('name', isset($employee) ? $employee->name : '') }}" placeholder="Employee Name" required>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email"
        value="{{ old('email', isset($employee) ? $employee->email : '') }}" placeholder="Employee Email" required>
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob"
        value="{{ old('dob', isset($employee) && $employee->dob ? $employee->dob->format('Y-m-d') : '') }}" required>
    @error('dob')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="doj" class="form-label">Date of Joining</label>
    <input type="date" class="form-control" id="doj" name="doj"
        value="{{ old('doj', isset($employee) && $employee->doj ? $employee->doj->format('Y-m-d') : '') }}" required>
    @error('doj')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
