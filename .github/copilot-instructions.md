# Copilot Instructions for Laravel School Project

## Project Overview

## Architecture & Data Flow

## Developer Workflows

## Project-Specific Patterns
	- In the database and model, use: `phone_number`, `gender`, `umur` (if present).
	- In Blade, reference fields exactly as in the model: e.g., `phone_number` not `nomor_telepon`, `gender` not `jenis_kelamin`.
	- If a field is missing in the model or migration, it will not display in the view.
	- `id`, `name`, `email`, `gender`, `umur`, `phone_number`, etc.

## Integration Points

## Examples
		```php
		<form method="POST" action="{{ route('student.edit') }}">
			@csrf
			<input type="hidden" name="id" value="{{ $student->id }}">
			<input type="text" name="name" value="{{ $student->name }}">
			<input type="email" name="email" value="{{ $student->email }}">
			<input type="number" name="umur" value="{{ $student->umur }}">
			<input type="text" name="phone_number" value="{{ $student->phone_number }}">
			<select name="gender">
				<option value="L" {{ $student->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
				<option value="P" {{ $student->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
			</select>
			<button type="submit">Simpan</button>
		</form>
		```

## References


**Troubleshooting field display issues:**
	- The field exists in the migration and database table.
	- The field is listed in the model's `$fillable` array.
	- The controller passes the field to the view.
	- The Blade template references the correct field name.

If you encounter unclear patterns or missing documentation, ask the user for clarification or examples from their workflow.
