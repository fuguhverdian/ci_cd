    <!--  suggestion -->
    <div class="suggestion" id="suggestion">
        <div class="container">
          <div class="suggestion-box">
            <div class="box">
              <i class="fa-solid fa-envelope"></i>
              <h1>SUGGESTION</h1>
              <p>Your Feedback Matters: Share Your Suggestions and Critiques</p>
            </div>
            <div class="form-suggestion">
              <form action={{ route('PostSugest') }} method="post">
                  @csrf
                <table>
                  <tr>
                    <td>
                      <input class="control  @error('First_Name') is-invalid @enderror" type="text" name="First_Name" placeholder="First Name" required autocomplete="off" />
                      @error('First_Name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                    </td>
                    <td>
                      <input  class="control  @error('Last_Name') is-invalid @enderror" type="text" name="Last_Name" placeholder="Last Name" autocomplete="off" />
                      @error('Last_Name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                  </td>
                  </tr>
                  <tr>
                    <td colspan="2"><input class="control  @error('Email') is-invalid @enderror" type="email" name="Email" placeholder="Your Email" required autocomplete="off" style="width: 100%" /></td>
                    @error('Email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </tr>
                  <tr>
                    <td colspan="2">
                      <textarea class="control  @error('Pesan') is-invalid @enderror" name="Pesan" cols="30" rows="10" placeholder="Message..." required style="width: 100%"></textarea>
                      @error('Pesan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <button type="submit">SEND</button>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--  suggestion -->
