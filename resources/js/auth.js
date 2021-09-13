/**
 * Created by Dreamlabs on 22/06/2021.
 */
 export default class Auth{

  constructor(permission){
      this.permission =  permission;
    }

       isDashboard(){
      return this.permission.includes(1);
    }

    isPaymentReport(){
        return this.permission.includes(2);
    }

    isAgent(){
        return this.permission.includes(3);
    }

    isRevPoint(){
        return this.permission.includes(4);
    }

    isService(){
        return this.permission.includes(5);
    }

    isLga(){
        return this.permission.includes(6);
    }

    isUser(){
        return this.permission.includes(7);
    }

    isSettlement(){
        return this.permission.includes(8);
    }


    isRemittance(){
        return this.permission.includes(9);
    }

    isPermission(){
        return this.permission.includes(10);
    }


}