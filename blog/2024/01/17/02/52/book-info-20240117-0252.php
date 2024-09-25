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
