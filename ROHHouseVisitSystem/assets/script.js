$(function () {
  // random string for initializing the SPCPQR Library
  var state = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15); //returned back to validate the authentication
  var nonce = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
  // load the config file for get configurations to connect singpass api
  $.getJSON( "config.json", function( data ) {
    var clientId = data.clientId;
    var redirectUri = data.redirectUri;
    var OIDCParams = {
      nonce: nonce || ('' + Math.random() * 1000000000000000 + '').slice(0, 15),
      state: state,
      clientId: clientId,
      redirectUri: redirectUri,
      scope: 'openid',
      responseType: 'code'
    };

    SPCPQR.init(
      'qr_wrapper',
      OIDCParams,
      function () {
        console.log('found');
        SPCPQR.refresh({ nonce: nonce, state: state });

      }
    );
  });

});
