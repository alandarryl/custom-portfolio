<!-- filepath: c:\xampp\htdocs\PHP\projet personal\CUSTOM PORTFOLIO\admin\manage_skills.php -->
<h2>Manage Skills</h2>
<p>Here you can add, edit, or delete your skills.</p>
<!-- Ajoutez ici le contenu spécifique pour gérer les compétences -->

<div class="text_button">
    <a href="#" class="btn btn-primary" id="add_skill">Add Skill</a>
    <a href="#" class="btn btn-secondary" id="edit_skill">Edit Skill</a>
    <a href="#" class="btn btn-danger" id="delete_skill">Delete Skill</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped" id="skills_table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Skill Name</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Les données des compétences seront chargées ici dynamiquement -->
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>