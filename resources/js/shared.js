/**
 * Created by Dreamlabs on 13/07/2020.
 *  To add user-defined functions for global use
 *  @author afeez(acodefix)
 */




export const shared = {

    app_url:document.querySelector("meta[name='app_url']").getAttribute('content'),
     irs:document.querySelector("meta[name='irs']").getAttribute('content'),
    suffixNotation: (value ) => {

        // Nine Zeroes for Billions
        return Math.abs(Number(value)) >= 1.0e+9

            ?  (Math.abs(Number(value)) / 1.0e+9).toFixed(2) + "B"
            // Six Zeroes for Millions
            : Math.abs(Number(value)) >= 1.0e+6
                ?  (Math.abs(Number(value)) / 1.0e+6).toFixed(2) + "M"
                // Three Zeroes for Thousands
                : Math.abs(Number(value)) >= 1.0e+3

                    ? (Math.abs(Number(value)) / 1.0e+3).toFixed(2) + "K"

                    : Math.abs(Number(value));


    },
    createdDateFormat:(value)=>{
        let date = new Date(value);

        let options = {
            weekday: 'long',
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        };

        return date.toLocaleString('en-NG', options);
    },

    paymentDateFormat:(value)=>{
        if(value.length === 0 )
            return '';
        let date = new Date(value);

        let options = {
            weekday: 'long',
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        };

        return date.toLocaleString('en-NG', options);
    },

      amountFormat:(amount)=>{
          let amt = new Intl.NumberFormat('en-NG', {
              style: 'currency',
              currency: 'NGN'
          }).format(amount);
   return amt;

    },




}
