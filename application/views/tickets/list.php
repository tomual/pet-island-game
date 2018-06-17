<?php $this->load->view('header') ?>
<h1>Tickets List</h1>
<div class="filter">
    <form action="">
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="1">Working</option>
        </select>
        <label for="status">Project</label>
        <select name="project" id="project">
            <option value="1">tintin2</option>
        </select>
        <input type="submit" value="Filter">
    </form>
</div>
<table border="1">
    <thead>
    <tr>
        <th>Ticket</th>
        <th>Status</th>
        <th>Project</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><a href="">Connect to Koi Auth API</a></td>
        <td>Working</td>
        <td>tintin2</td>
        <td>12/05/2018 3:19PM</td>
        <td>12/05/2018 3:19PM</td>
    </tr>
    <tr>
        <td><a href="">Connect to Koi Auth API</a></td>
        <td>Working</td>
        <td>tintin2</td>
        <td>12/05/2018 3:19PM</td>
        <td>12/05/2018 3:19PM</td>
    </tr>
    <tr>
        <td><a href="">Connect to Koi Auth API</a></td>
        <td>Working</td>
        <td>tintin2</td>
        <td>12/05/2018 3:19PM</td>
        <td>12/05/2018 3:19PM</td>
    </tr>
    <tr>
        <td><a href="">Connect to Koi Auth API</a></td>
        <td>Working</td>
        <td>tintin2</td>
        <td>12/05/2018 3:19PM</td>
        <td>12/05/2018 3:19PM</td>
    </tr>
    <tr>
        <td><a href="">Connect to Koi Auth API</a></td>
        <td>Working</td>
        <td>tintin2</td>
        <td>12/05/2018 3:19PM</td>
        <td>12/05/2018 3:19PM</td>
    </tr>
    <tr>
        <td><a href="">Connect to Koi Auth API</a></td>
        <td>Working</td>
        <td>tintin2</td>
        <td>12/05/2018 3:19PM</td>
        <td>12/05/2018 3:19PM</td>
    </tr>
    </tbody>
</table>
<?php $this->load->view('footer') ?>
