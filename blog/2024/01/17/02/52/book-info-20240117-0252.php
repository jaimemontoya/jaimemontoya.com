<?php
  $index->content .= 
           "<p>I completed the first 8 steps of the <span class=\"cod\">Facebook Login for Android - Quickstart</span> available at <a href=\"https://developers.facebook.com/docs/facebook-login/android/\">https://developers.facebook.com/docs/facebook-login/android/</a>. After that, I continued with the remaining steps shared below.</p><p>I added the following code to my <span class=\"cod\">SignIn.java</span> file:</p>
<pre>
package ...;
import static android.content.ContentValues.TAG;
...
import com.facebook.CallbackManager;
public class SignIn ...{
  private CallbackManager callbackManager;
  private static final String EMAIL = \"email\";
  private LoginButton loginButton;
  ...
  protected void onCreate(...){
    ...
	callbackManager = CallbackManager.Factory.create();
	loginButton = (LoginButton) findViewById(R.id.fbLoginButton);
    ...
  }
}
</pre>
		   <p>I added the following code to my <span class=\"cod\">sign_in.xml</span> file:</p>
<pre>
<com.facebook.login.widget.LoginButton
    android:id=\"@+id/fbLoginButton\"
    android:layout_width=\"wrap_content\"
    android:layout_height=\"wrap_content\"
    android:layout_gravity=\"center_horizontal\"
    android:layout_marginTop=\"20dp\"
    android:layout_marginBottom=\"20dp\"
    android:onClick=\"performFBLogin\" />
</pre>
		   <div>Published: 2:52 AM GMT · Jan 17, 2024</div>\n";
?>
