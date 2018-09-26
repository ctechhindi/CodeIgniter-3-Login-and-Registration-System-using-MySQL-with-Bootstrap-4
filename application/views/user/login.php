<div class="container">
    <?= form_open() ?>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Enter email">            
        </div>       
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    <?= form_close() ?>
</div>