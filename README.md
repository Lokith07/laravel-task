<h1>Employee CRUD Task</h1>

<h2>Requirements</h2>
<ul>
    <li><strong>PHP</strong>: &gt;= 8.2</li>
    <li><strong>Composer</strong>: Latest version</li>
    <li><strong>MySQL Server</strong>: 5.8 or higher</li>
    <li><strong>Local Server</strong>: XAMPP, WAMP, or Laravel’s built-in server (<code>php artisan serve</code>)</li>
    <li><strong>Git</strong>: For cloning the repository</li>
</ul>

<h2>Login Details (After Running Seeder)</h2>
<h3>Admin</h3>
<ul>
    <li>Email: <code>admin@example.com</code></li>
    <li>Password: <code>Test@123</code></li>
</ul>

<h3>User</h3>
<ul>
    <li>Email: <code>user@example.com</code></li>
    <li>Password: <code>Test@123</code></li>
</ul>

<h2>Features</h2>

<h3>Admin Role</h3>
<ul>
    <li>Full CRUD access to employees (Create, Read, Update, Delete).</li>
    <li>Access to:
        <ul>
            <li><code>/employees</code></li>
            <li><code>/employees/create</code></li>
            <li><code>/employees/{id}/edit</code></li>
            <li>Delete actions</li>
        </ul>
    </li>
</ul>

<h3>User Role</h3>
<ul>
    <li>Read-only access to the employee list (<code>/employees</code>).</li>
</ul>

<h3>Employee Fields</h3>
<ul>
    <li>Employee ID (unique)</li>
    <li>Name</li>
    <li>Email (unique)</li>
    <li>Date of Birth (DOB)</li>
    <li>Date of Joining (DOJ)</li>
</ul>

<h3>Authentication</h3>
<ul>
    <li>Login, logout, and dashboard using default Laravel Auth.</li>
</ul>

<h3>Permissions</h3>
<ul>
    <li>Managed via <a href="https://github.com/spatie/laravel-permission" target="_blank">Spatie Laravel Permission</a>:
        <ul>
            <li><code>employee.create</code></li>
            <li><code>employee.read</code></li>
            <li><code>employee.update</code></li>
            <li><code>employee.delete</code></li>
        </ul>
    </li>
</ul>

<h2>Steps Followed to Develop</h2>
<ol>
    <li>Created a new Git repository and cloned it to the local machine.</li>
    <li>Created a new branch named <code>Backend_task_LS</code>.</li>
    <li>Created a new Laravel project (version 11).</li>
    <li>Installed <strong>Spatie Role Permission</strong> package.</li>
    <li>Published config and migration files of Spatie Laravel Permission.</li>
    <li>Created <code>Employee</code> migration, model, and controller.</li>
    <li>Ran <code>php artisan migrate</code> command.</li>
    <li>Created <code>RolePermissionSeeder</code> to add users, roles, and permissions.</li>
    <li>Downloaded an admin panel template and created Blade templates for:
        <ul>
            <li>Login</li>
            <li>Dashboard</li>
            <li>Employee management pages</li>
        </ul>
    </li>
    <li>Added necessary routes in the <code>web.php</code> file.</li>
    <li>Implemented Create, Edit, View, Update, and Delete logic in <code>EmployeeController</code>.</li>
</ol>
