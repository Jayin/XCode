package temp;

public class P_test {
	public static void main(String[] args) {

		System.out.println(P.from(
				"I am { name } and user_id = {user_id} with alias {name}.")
				.put("name", "Jayin").put("user_id", "3112002722").format());
	}
}
