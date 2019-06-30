export type Disposable = () => void;

export function isString(val: unknown): val is string {
	return typeof val === "string";
}
