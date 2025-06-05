<style>
    /* From Uiverse.io by Yaya12085 */ 
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
}

.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: royalblue;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: royalblue;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: royalblue;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
</style>
<body>
    <!-- From Uiverse.io by Yaya12085 --> 
    <form class="form" action="sendmail.php" method="POST">
        <p class="title">Renew or want to Buy Subcription</p>
        <p class="message">Your message will be reply within 24hr</p>
        <label>
            <input type="text" class="input" name="subject" placeholder="" value="Renew" hidden>
            <span>Subject</span>
        </label> 
            <div class="flex">
            <label>
                <input type="text" class="input" name="firstname" placeholder="">
                <span>Firstname</span>
            </label>

            <label>
                <input type="text" class="input" name="lastname" placeholder="">
                <span>Lastname</span>
            </label>
        </div>  
                
        <label>
            <input type="email" class="input" name="email" placeholder="">
            <span>Email</span>
        </label> 
            
        <label>
            <input type="number" class="input" name="number" placeholder="">
            <span>Mobile Number</span>
        </label> 

        <label>
            <input type="company_name" class="input" name="company_name" placeholder="">
            <span>Company Name</span>
        </label>
        <label>
            <input type="company_address" class="input" name="company_address" placeholder="">
            <span>Company Address</span>
        </label>
        <label>
            <input type="number" class="input" name="license_number" placeholder="">
            <span>License Number</span>
        </label>
        <button class="submit">Send the Request</button>
    </form>
    
</body>