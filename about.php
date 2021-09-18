<style>
    #button {
        border-style: solid;
        border-color: rgb(160, 160, 160);
        border-radius: 25px;
        padding: 5px;
        transition: 0.3s;
    }
    
    #button:hover {
        background-color: #1d221d;
        color: white;
    }
</style>
<!-- Activity section -->
<div class="row activity text-center">
    <div class="col-md act">
        <img style="width: 55%;padding-top: 20px;" src="images/user.png" class="img-fluid">
        <br>
        <a href="ViewUsers.php"><button id="button">View Users</button></a>
    </div>
    <div class="col-md act ">
        <img style="width: 55%;padding-top: 6%; " src="images/transferb.png " class="img-fluid ">
        <br>
        <a href="moneyTransfer.php "><button id="button">Make a Transaction</button></a>
    </div>
    <div class="col-md act ">
        <img src="images/transaction historyb.jpg " class="img-fluid ">
        <br>
        <a href="History.php "><button id="button">Transaction History</button></a>
    </div>
</div>