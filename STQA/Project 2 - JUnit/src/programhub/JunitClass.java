package programhub;

public class JunitClass {

	public int pythagoras(int a, int b) {
		int c = (a*a)+(b*b);
		int temp;
		int sr = c / 2;
		do {
			temp = sr;
			sr = (temp + (c / temp)) / 2;
		} while ((temp - sr) != 0);

		return sr;
	}
	
	public int areasqr(int c) {
		return c*c;
	}

}
