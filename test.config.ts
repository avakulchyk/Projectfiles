export class TestConfig {

    // Application URL
    appUrl = process.env.BASE_URL || "http://localhost:8080/";


    // Valid login user
    email = "vakulchykanastasiia@gmail.com";
    password = "NewPassword@12345678";


    // User for change password test
    changePasswordEmail = "password.change3@test.com";
    changePassword = "NewPassword123456";
    newPassword = "NewPassword1234567";

    // User for account lock test
    failedLoginEmail = "lock.test@test.com";
    wrongPassword = "WrongPassword123";


    // Product details
    productName = "MacBook";
    productQuantity = "2";
    totalPrice = "$1,204.00";


    // Search criteria
    searchCriteria = "Mac";

}
