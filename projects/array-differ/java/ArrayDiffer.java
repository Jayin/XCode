package com.xcode;

public class ArrayDiffer {

	public static void main(String[] args) {
		Integer[] s1 = new Integer[] { 2, 3, 4, 5, 6, 7 };
		Integer[] s2 = new Integer[] { 3, 50 };
		Integer[] s3 = new Integer[] { 1, 4, 7 };

		for (Integer i : ArrayDifferTest.array_diff(s1, s2, s3)) {
			System.out.print(i + " ");
		}

		Integer[] s4 = new Integer[] { 2, 3, 4, 5, 6, 7 };
		Integer[] s5 = new Integer[] { 3, 50 };

		System.out.println();
		for (Integer i : ArrayDifferTest.array_diff(s4, s5)) {
			System.out.print(i + " ");
		}
	}

}
