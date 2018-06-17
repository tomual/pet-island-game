<?php $this->load->view('header') ?>
<div class="ticket">
    <h1>Ticket Title</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis delectus dolorem doloremque eaque esse et fugiat iure, libero nulla odio odit ratione sapiente sequi sit soluta, ullam? Explicabo, fugit.</p>
    <h2>Details</h2>
    <table>
        <tr>
            <th>Author</th>
            <td>tom3</td>
        </tr>
        <tr>
            <th>Created at</th>
            <td>23/05/2018 03:12PM</td>
        </tr>
        <tr>
            <th>Project</th>
            <td>tintin2</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>Working</td>
        </tr>
        <tr>
            <td></td>
            <td><button>Edit Ticket</button></td>
        </tr>
    </table>

    <h2>Quick Update</h2>
    <form method="post">
        <table>
            <tr>
                <td><label for="">Status</label></td>
                <td>
                    <select name="status" id="status">
                        <option value="1">Working</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="comment">Comment</label></td>
                <td><textarea name="comment" id="comment" cols="30" rows="3"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
    <h2>Revisions</h2>
    <ul>
        <li>Status from <a href="">Input</a> to <a href="">Working</a>
            <br>by <a href="">tom3</a> at 12/05/2018 12:00PM
        </li>
    </ul>
</div>
<?php $this->load->view('footer') ?>
