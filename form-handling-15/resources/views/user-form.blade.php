<div>
    <h2>Add New User</h2>

    <form action="adduser" method="post">
        @csrf
        <div>
            <h5>Your Skill</h5>
            <input type="checkbox" name="skill[]" value="php" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="java" id="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skill[]" value="c++" id="c++">
            <label for="c++">C++</label>
            <input type="checkbox" name="skill[]" value="laravel" id="laravel">
            <label for="laravel">LARAVEL</label>
        </div>
        <br>

        <div>
            <h5>Gender</h5>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Male</label>
            <input type="radio" name="gender" value="other" id="other">
            <label for="other">Other</label>
        </div>
        <div>
            <h5>City</h5>
            <select name="city" id="city">
                <option value="dhaka">Dhaka</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="rongpur">Rongpur</option>
                <option value="sylhet">Sylhet</option>
                <option value="khulna">Khulna</option>
            </select>
        </div>

        <div>
            <h5>Age</h5>
            <input type="range" name="age" min="18"
            max="80">
        </div>

        <button>Add New User</button>


    </form>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
