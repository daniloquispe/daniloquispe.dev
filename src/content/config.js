import { z, defineCollection } from 'astro:content';

const portfolioCollection = defineCollection({
	type: "content",
	schema: z.object({
		name: z.string(),
		year: z.number(),
		summary: z.string().optional(),
		image: z.string(),
		tags: z.array(z.string()),
		isFeatured: z.boolean().default(false)
	})
});

export const collections = {portfolio: portfolioCollection};
