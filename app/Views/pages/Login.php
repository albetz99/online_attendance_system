<form action="<?= base_url('/checkLogin');?>" method="post">
    <label for="loginEmail">Email</label>
    <input type="email" name="loginEmail" id="loginEmail">
    <br>
    <label for="loginPassword">Password</label>
    <input type="password" name="loginPassword" id="loginPassword">
    <br>
    <button type="submit">Submit</button>
</form>
