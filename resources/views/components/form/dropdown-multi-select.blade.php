<div class="container">


<h6>{{ TranslationHelper::translate(ucwords('')) }}</h6>
		<div class="dropdown">
			<button class="btn btn-dark dropdown-toggle"
					type="button"
					id="multiSelectDropdown"
					data-bs-toggle="dropdown"
					aria-expanded="false">
				{{ ucwords('choose magnetic particles') }}
			</button>
			<ul class="dropdown-menu"
				aria-labelledby="multiSelectDropdown">
				<li>
				<label>
					<input type="checkbox"
						value="Java">
						Java
					</label>
				</li>
				<li>
				<label>
					<input type="checkbox"
						value="C++">
						C++
					</label>
				</li>
				<li>
				<label>
					<input type="checkbox"
						value="Python">
						Python
					</label>
				</li>
			</ul>
		</div>
	</div>

	<script src="{{ asset('dashboard/assets/DropdownMultiSelect/js/script.js') }}">

	</script>
