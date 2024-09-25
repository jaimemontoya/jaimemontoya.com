<?php
  $index->content .= 
           "<p>I completed the first 8 steps of the <span class=\"cod\">Facebook Login for Android - Quickstart</span> available at <a href=\"https://developers.facebook.com/docs/facebook-login/android/\">https://developers.facebook.com/docs/facebook-login/android/</a>. After that, I continued with the remaining steps shared below.</p><p>I added the following code to my <span class=\"cod\">SignIn.java</span> file:</p>
<pre>
package ...;
...
import java.util.Arrays;
...
import com.facebook.AccessToken;
import com.facebook.CallbackManager;
import com.facebook.FacebookCallback;
import com.facebook.FacebookException;
import com.facebook.GraphRequest;
import com.facebook.GraphResponse;
import com.facebook.HttpMethod;
import com.facebook.login.LoginManager;
import com.facebook.login.LoginResult;
import com.facebook.login.widget.LoginButton;
public class SignIn ...{
  private CallbackManager callbackManager;
  private static final String EMAIL = \"email\";
  private LoginButton fbLoginButton;
  ...
  protected void onCreate(...){
    ...
    callbackManager = CallbackManager.Factory.create();
    fbLoginButton = (LoginButton) findViewById(R.id.fbLoginButton);
    fbLoginButton.setReadPermissions(\"email\");
    fbLoginButton.registerCallback(callbackManager, new FacebookCallback&lt;LoginResult&gt;() {
      @Override
      public void onSuccess(LoginResult loginResult) {
        // App code
        handleFacebookAccessToken(loginResult);
      }
      @Override
      public void onCancel() {
        // App code
      }
      @Override
      public void onError(@NonNull FacebookException e) {
        // App code
        e.printStackTrace();
      }
    });
    ...
  }
  @Override
  protected void onActivityResult(int requestCode, int resultCode, Intent data) {
    callbackManager.onActivityResult(requestCode, resultCode, data);
    super.onActivityResult(requestCode, resultCode, data);
  }
  ...
  private void handleFacebookAccessToken(LoginResult loginResult) {
    GraphRequest.Callback gCallback = new GraphRequest.Callback() {
      @Override
      public void onCompleted(@NonNull GraphResponse response) {
        System.out.println(\"response.getJSONObject().toString(): \"+response.getJSONObject().toString());
        // I/System.out: response.getJSONObject().toString(): {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"first_name\":\"Jaime\",\"last_name\":\"Montoya\"}
        if (response != null && response.getJSONObject() != null && response.getJSONObject().has(\"first_name\")) {
          try {
            System.out.println(\"response.getJSONObject().getString(\\\"first_name\\\"): \" + response.getJSONObject().getString(\"first_name\"));
            // I/System.out: response.getJSONObject().getString(\"first_name\"): Jaime
          } catch (JSONException e) {
            Log.e(TAG, \"onCompleted: \", e);
          }
        }
      }
    };						
    new GraphRequest(AccessToken.getCurrentAccessToken(),\"/me?fields=id,name,email,first_name,last_name\", null,HttpMethod.GET, gCallback).executeAsync();
    GraphRequest request = GraphRequest.newMeRequest(loginResult.getAccessToken(), new GraphRequest.GraphJSONObjectCallback() {
      @Override
      public void onCompleted(@Nullable JSONObject jsonObject, @Nullable GraphResponse graphResponse) {
        // App code
        // Access the response here and retrieve the information you want and print it out
        String rawResponse = graphResponse.getRawResponse();
        System.out.println(\"graphResponse.getRawResponse(): \"+rawResponse);
        // I/System.out: graphResponse.getRawResponse(): {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&oh=00_AYBgut2eXf9VkZHd2zjyNbRE3Forr-cKw-Qck9bsEvMoiw&oe=66F92186\",\"width\":50}}}
        if (graphResponse.getError() != null) {
          // Handle error
          System.out.println(\"ERROR graphResponse.getError().toString(): \"+graphResponse.getError().toString());
        } else {
          String jsonresult = String.valueOf(jsonObject);
          System.out.println(\"String.valueOf(jsonObject): \"+jsonresult);
          // I/System.out: String.valueOf(jsonObject): {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&oh=00_AYBgut2eXf9VkZHd2zjyNbRE3Forr-cKw-Qck9bsEvMoiw&oe=66F92186\",\"width\":50}}}
          String resp = String.valueOf(graphResponse.getJSONObject());
          System.out.println(\"String.valueOf(graphResponse.getJSONObject()): \"+resp);
          // I/System.out: String.valueOf(graphResponse.getJSONObject()): {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&_nc_gid=AU0hDo5VUmJ90SLSrSDffIa&oh=00_AYAgVwgQHdsNY8842kh-RB2cwnUQSPqhLh1vDTCAB5kW6g&oe=66F92186\",\"width\":50}}}
          // I/System.out: String.valueOf(graphResponse.getJSONObject()): {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&oh=00_AYBgut2eXf9VkZHd2zjyNbRE3Forr-cKw-Qck9bsEvMoiw&oe=66F92186\",\"width\":50}}}
        }
        Log.e(TAG,\"jsonObject.toString(): \"+jsonObject.toString());
        // E/ContentValues: jsonObject.toString(): {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&_nc_gid=AU0hDo5VUmJ90SLSrSDffIa&oh=00_AYAgVwgQHdsNY8842kh-RB2cwnUQSPqhLh1vDTCAB5kW6g&oe=66F92186\",\"width\":50}}}
        // E/ContentValues: jsonObject.toString(): {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&oh=00_AYBgut2eXf9VkZHd2zjyNbRE3Forr-cKw-Qck9bsEvMoiw&oe=66F92186\",\"width\":50}}}
        Log.e(TAG,\"graphResponse.toString(): \"+graphResponse.toString());
        // E/ContentValues: graphResponse.toString(): {Response:  responseCode: 200, graphObject: {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&_nc_gid=AU0hDo5VUmJ90SLSrSDffIa&oh=00_AYAgVwgQHdsNY8842kh-RB2cwnUQSPqhLh1vDTCAB5kW6g&oe=66F92186\",\"width\":50}}}, error: null}
        // E/ContentValues: graphResponse.toString(): {Response:  responseCode: 200, graphObject: {\"id\":\"100001513883090\",\"name\":\"Jaime Montoya\",\"email\":\"jmontoya@jaimemontoya.com\",\"picture\":{\"data\":{\"height\":50,\"is_silhouette\":false,\"url\":\"https:\/\/scontent-mia3-1.xx.fbcdn.net\/v\/t39.30808-1\/294888000_5376067482453661_527545311208686112_n.jpg?stp=cp1_dst-jpg_s50x50&_nc_cat=100&ccb=1-7&_nc_sid=6738e8&_nc_eui2=AeHlWp-lPLRcFXHEYbQxdAiD4Acj0RkYfD3gByPRGRh8Pd-THM0TB9SKYxa3HqARKGUDUrjCeujRwIihU-T5DZNB&_nc_ohc=Hu_mnUSvep0Q7kNvgGlLSvW&_nc_ht=scontent-mia3-1.xx&edm=AP4hL3IEAAAA&oh=00_AYBgut2eXf9VkZHd2zjyNbRE3Forr-cKw-Qck9bsEvMoiw&oe=66F92186\",\"width\":50}}}, error: null}
        try {
          String email  = jsonObject.getString(\"email\");
          String birthday = jsonObject.getString(\"birthday\");
          String gender = jsonObject.getString(\"gender\");
          String name = jsonObject.getString(\"name\");
        } catch (JSONException ex) {
          Log.d(\"ex.toString(): \", ex.toString());
          // D/ex.toString(): org.json.JSONException: No value for birthday
        }
      }
    });
    Bundle parameters = new Bundle();
    parameters.putString(\"fields\",\"id,name,email,gender,birthday,picture,timezone\");
    request.setParameters(parameters);
    request.executeAsync();
  }
  ...
}
</pre>
		   <p>I added the following code to my <span class=\"cod\">sign_in.xml</span> file:</p>
<pre>
&lt;com.facebook.login.widget.LoginButton
    android:id=\"@+id/fbLoginButton\"
    android:layout_width=\"wrap_content\"
    android:layout_height=\"wrap_content\"
    android:layout_gravity=\"center_horizontal\"
    android:layout_marginTop=\"20dp\"
    android:layout_marginBottom=\"20dp\" /&gt;
</pre>
		   <div>Published: 2:52 AM GMT · Jan 17, 2024</div>\n";
?>
