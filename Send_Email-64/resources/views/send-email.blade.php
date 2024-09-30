<div>
   <h1>Add Details for Send Email</h1>
   <form action="send-email" method="post">
    @csrf
    <input type="text" name="to" placeholder="Enter Email Address">
    <br><br>
    <input type="text" name="subject" placeholder="email subject">
    <br><br>
    <textarea name="msg" id="" cols="30" rows="10" placeholder="Enter Massage"></textarea>
    <br><br>
    <button>Send Email</button>


   </form>
</div>
